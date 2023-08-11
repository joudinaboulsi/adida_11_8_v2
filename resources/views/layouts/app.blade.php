<!DOCTYPE html>
<html class="wide wow-animation">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')" />
        <meta name="keywords" content="Adida Spices lebanon, Adida Spices, Lebanese herbs and spices, Whole sale food product in Lebanon, Proudly Lebanese products, Wholesale spices, Wholesale spices in Lebanon, Wholesale tea & herbs, Wholesale tea & herbs in Lebanon, Oriental and multinational blends, Oriental and multinational blends in Lebanon, Quality herbs and spices in Lebanon, Lebanese herbs and spices with ISO 22000 certified, Lebanese Juices, Lebanese Spices, Lebanese flavors, Top 10 best Lebanese herbs, Top 5 best spices in Lebanon, 100% healthy Lebanese herbs, Healthy herbs in Lebanon, Lebanese herb manufacturing, Lebanese spices manufacturing, Food safety Lebanon, Food flavors, Traditional Lebanese herbs and spices, Shop for Spices online, Lebanese cuisine flavors, Lebanese food, Spices Lebanon, Lebanese flavors, Middle Eastern spice blends, Ground spices, Lebanese dishes, Bahar, Baharat, Lebanese seven spice, Seven spice, Spice blends, Levantine cuisine, Mediterranean cuisine, Middle Eastern cuisine, Spice companies in Lebanon, Lebanese spices online, Food distributors in Lebanon, Spices factories in Lebanon, Culinary herbs, List of all herbs and spices, Best Spice & Herbs traders in Lebanon, Best Spice & Herbs manufactures in Lebanon, Instant ready mixes" />

        <link href="https://fonts.googleapis.com/css?family=Expletus+Sans:400,500,600,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/fonts.css">

        @if(Route::currentRouteName() == 'order_path')
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/css/dataTables.checkboxes.css">
        @endif
@if (app()->getLocale() === 'Ar')
        <link rel="stylesheet" href="/css/style_rtl.css">
@elseif (app()->getLocale() === 'En')
       
        <link rel="stylesheet" href="/css/style.css">
        @else
        <link rel="stylesheet" href="/css/style_fr.css">
        @endif

        <!-- google captcha recaptcha -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body data-spy="scroll" data-target="#sticky-sidebar">

        <div class="page">

            @include('layouts.header')

            @yield('content')

            @include('layouts.footer')

        </div>

        <script src="/js/core.min.js"></script>
        <script src="/js/script.js"></script>

        @if(Route::currentRouteName() == 'contact_path')
        <script src="/js/jquery.validate.min.js"></script>
        <script type="text/javascript">
            $("#contact").validate({
                ignore: ".ignore",    
                // Rules for form validation
                rules: {
                    fullname: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    sector: {
                        required: true
                    },
                    message: {
                        required: true,
                        minlength: 3
                    },
                    hiddenRecaptcha: {
                        required: function () {
                            if (grecaptcha.getResponse() == '') {
                                return true;
                            } else {
                                return false;
                            }
                        }
                    }
                },
                // Messages for form validation
                messages:
                {
                    hiddenRecaptcha:
                    {
                        required: "Please verify that you are a Human."
                    }
                }
            });

            $(window).load(function(){ 
                $('#myModal').modal('show');
            });
        </script>

        @elseif(Route::currentRouteName() == 'order_path')
        @if(app()->getLocale()==='En')
                <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
                <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
                <script type="text/javascript" src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/js/dataTables.checkboxes.min.js"></script>
                <script type="text/javascript">

                    $('.continue').on('click', function(e){
                        $('.nav-tabs > .active').next('li').find('a').trigger('click');
                    });

                    $(document).ready(function() {

                        var table = $('.table').DataTable({     
                            'columnDefs': [{
                                'targets': 0,
                                'checkboxes': {
                                    'selectRow': true
                                }
                            }],
                            'select': {
                                'style': 'multi'
                            },
                            'order': [[1, 'asc']]
                        });
                    
                        // Order : STEP 1 
                        $('#msform1').on('click', function(e){

                            var form = $('#order_form');

                            //remove old selections
                            $('.product-selected').remove();


                            var rows_selected =  table.columns().checkboxes.selected()[0];

                            console.log(rows_selected);

                            // Iterate over all selected checkboxes
                            $.each(rows_selected, function(index, rowId){
                                // Create a hidden element 
                                form.append('<input class="product-selected" type="hidden" name="id[]" value="'+rowId+'"/>');
                            });

                            //remove old quantities
                            $('#quantities_block').html('');

                            var block = ''; 

                            // ajax call to the page where we edit selected posts
                            $.ajax({
                            url: 'get-selected-products',
                            method: "POST",
                            data: {'rows_selected' : rows_selected,},
                            headers: {'X-CSRF-Token': $('input[name=_token]').val() },
                            dataType: "json",

                            success: function (data) { console.log(data);

                                data.forEach(function(entry, i) 
                                {
                                    // build and add the section of each version of the history
                                    block += '<div class="cart-inline-item">\
                                                <div class="unit unit-spacing-sm align-items-center">\
                                                    <div class="unit-left">\
                                                        <img src="/images/products/'+entry.image+'" alt="" width="100" height="90"/>\
                                                        <h6 class="cart-inline-name text-left">'+entry.name+'</h6>\
                                                    </div>\
                                                    <div class="unit-body">\
                                                        <div>\
                                                            <div class="group-xs group-middle">\
                                                                <b>Quantity: </b>\
                                                                <div class="table-cart-stepper">\
                                                                    <input class="input" type="number" name="qty_'+entry.product_id+'" data-zeros="true" value="1" min="1" max="1000"/>\
                                                                </div>\
                                                            </div>\
                                                            <div class="group-xs group-middle">\
                                                                <b>&nbsp;&nbsp;&nbsp;&nbsp; Packaging:</b>\
                                                                <label class="">\
                                                                    <input name="pack_'+entry.product_id+'" value="50g" type="radio">50g\
                                                                </label>\
                                                                <label class="">\
                                                                    <input name="pack_'+entry.product_id+'" value="100g" type="radio">100g\
                                                                </label>\
                                                                <label class="">\
                                                                    <input name="pack_'+entry.product_id+'" value="500g" type="radio">500g\
                                                                </label>\
                                                                <label class="">\
                                                                    <input name="pack_'+entry.product_id+'" value="box" type="radio">box\
                                                                </label>\
                                                            </div>\
                                                        </div>\
                                                    </div>\
                                                </div>\
                                            </div>';
                                });

                                //fill selected products quantities
                                $('#quantities_block').append(block);

                                //go to step 2
                                $('#tabs-1-1').removeClass('show active');
                                $('#tabs-1-2').addClass('show active');
                                $('#st1').removeClass('active');
                                $('#st2').addClass('active');
                            },

                            error: function(jqXHR, textStatus, errorThrown) {

                                console.log('Status:'+jqXHR.status);
                                console.log('Text status:'+textStatus);
                                console.log('Error Thrown:'+errorThrown);
                            }

                            });
                        });  

                        // Order : STEP 2 
                        $('#msform2').on('click', function(e){
                            //go to step 3
                            $('#tabs-1-2').removeClass('show active');
                            $('#tabs-1-3').addClass('show active');
                            $('#st2').removeClass('active');
                            $('#st3').addClass('active');
                        });

                    }); 

                </script>
        @elseif(app()->getLocale()==='Ar')
                <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
                <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
                <script type="text/javascript"
                    src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/js/dataTables.checkboxes.min.js"></script>
            
                    
                <script type="text/javascript">
                    $('.continue').on('click', function(e){
                                $('.nav-tabs > .active').next('li').find('a').trigger('click');
                            });
                
                            $(document).ready(function() {
                
                                var table = $('.table').DataTable({     
                                    'columnDefs': [{
                                        'targets': 0,
                                        'checkboxes': {
                                            'selectRow': true
                                        }
                                    }],
                                    language: {
                                    url: 'https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json'
                                    },
                                    'select': {
                                        'style': 'multi'
                                    },
                                    'order': [[1, 'asc']]
                                });
                            
                                // Order : STEP 1 
                                $('#msform1').on('click', function(e){
                
                                    var form = $('#order_form');
                
                                    //remove old selections
                                    $('.product-selected').remove();
                
                
                                    var rows_selected =  table.columns().checkboxes.selected()[0];
                
                                    console.log(rows_selected);
                
                                    // Iterate over all selected checkboxes
                                    $.each(rows_selected, function(index, rowId){
                                        // Create a hidden element 
                                        form.append('<input class="product-selected" type="hidden" name="id[]" value="'+rowId+'"/>');
                                    });
                
                                    //remove old quantities
                                    $('#quantities_block').html('');
                
                                    var block = ''; 
                
                                    // ajax call to the page where we edit selected posts
                                    $.ajax({
                                    url: 'get-selected-products',
                                    method: "POST",
                                    data: {'rows_selected' : rows_selected,},
                                    headers: {'X-CSRF-Token': $('input[name=_token]').val() },
                                    dataType: "json",
                
                                    success: function (data) { console.log(data);
                
                                        data.forEach(function(entry, i) 
                                        {
                                            // build and add the section of each version of the history
                                            block += '<div class="cart-inline-item">\
                                                        <div class="unit unit-spacing-sm align-items-center">\
                                                            <div class="unit-left">\
                                                                <img src="/images/products/'+entry.image+'" alt="" width="100" height="90"/>\
                                                                <h6 class="cart-inline-name text-left">'+entry.name+'</h6>\
                                                            </div>\
                                                            <div class="unit-body">\
                                                                <div>\
                                                                    <div class="group-xs group-middle">\
                                                                        <b>كمية: </b>\
                                                                        <div class="table-cart-stepper">\
                                                                            <input class="input" type="number" name="qty_'+entry.product_id+'" data-zeros="true" value="1" min="1" max="1000"/>\
                                                                        </div>\
                                                                    </div>\
                                                                    <div class="group-xs group-middle">\
                                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp; التعبئة والتغليف:</b>\
                                                                        <label class="">\
                                                                            <input name="pack_'+entry.product_id+'" value="50g" type="radio">50g\
                                                                        </label>\
                                                                        <label class="">\
                                                                            <input name="pack_'+entry.product_id+'" value="100g" type="radio">100g\
                                                                        </label>\
                                                                        <label class="">\
                                                                            <input name="pack_'+entry.product_id+'" value="500g" type="radio">500g\
                                                                        </label>\
                                                                        <label class="">\
                                                                            <input name="pack_'+entry.product_id+'" value="box" type="radio">box\
                                                                        </label>\
                                                                    </div>\
                                                                </div>\
                                                            </div>\
                                                        </div>\
                                                    </div>';
                                        });
                
                                        //fill selected products quantities
                                        $('#quantities_block').append(block);
                
                                        //go to step 2
                                        $('#tabs-1-1').removeClass('show active');
                                        $('#tabs-1-2').addClass('show active');
                                        $('#st1').removeClass('active');
                                        $('#st2').addClass('active');
                                    },
                
                                    error: function(jqXHR, textStatus, errorThrown) {
                
                                        console.log('Status:'+jqXHR.status);
                                        console.log('Text status:'+textStatus);
                                        console.log('Error Thrown:'+errorThrown);
                                    }
                
                                    });
                                });  
                
                                // Order : STEP 2 
                                $('#msform2').on('click', function(e){
                                    //go to step 3
                                    $('#tabs-1-2').removeClass('show active');
                                    $('#tabs-1-3').addClass('show active');
                                    $('#st2').removeClass('active');
                                    $('#st3').addClass('active');
                                });
                
                            }); 
                
                </script>

             
        @else
                <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
                <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
                <script type="text/javascript"
                    src="https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/js/dataTables.checkboxes.min.js"></script>
                <script type="text/javascript">
                    $('.continue').on('click', function(e){
                                $('.nav-tabs > .active').next('li').find('a').trigger('click');
                            });
                
                            $(document).ready(function() {
                
                                var table = $('.table').DataTable({     
                                    'columnDefs': [{
                                        'targets': 0,
                                        'checkboxes': {
                                            'selectRow': true
                                        }
                                    }],
                                    language: {
                                    url: 'https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json'
                                    },
                                    
                                    'select': {
                                        'style': 'multi'
                                    },
                                    'order': [[1, 'asc']]
                                });
                            
                                // Order : STEP 1 
                                $('#msform1').on('click', function(e){
                
                                    var form = $('#order_form');
                
                                    //remove old selections
                                    $('.product-selected').remove();
                
                
                                    var rows_selected =  table.columns().checkboxes.selected()[0];
                
                                    console.log(rows_selected);
                
                                    // Iterate over all selected checkboxes
                                    $.each(rows_selected, function(index, rowId){
                                        // Create a hidden element 
                                        form.append('<input class="product-selected" type="hidden" name="id[]" value="'+rowId+'"/>');
                                    });
                
                                    //remove old quantities
                                    $('#quantities_block').html('');
                
                                    var block = ''; 
                
                                    // ajax call to the page where we edit selected posts
                                    $.ajax({
                                    url: 'get-selected-products',
                                    method: "POST",
                                    data: {'rows_selected' : rows_selected,},
                                    headers: {'X-CSRF-Token': $('input[name=_token]').val() },
                                    dataType: "json",
                
                                    success: function (data) { console.log(data);
                
                                        data.forEach(function(entry, i) 
                                        {
                                            // build and add the section of each version of the history
                                            block += '<div class="cart-inline-item">\
                                                        <div class="unit unit-spacing-sm align-items-center">\
                                                            <div class="unit-left">\
                                                                <img src="/images/products/'+entry.image+'" alt="" width="100" height="90"/>\
                                                                <h6 class="cart-inline-name text-left">'+entry.name+'</h6>\
                                                            </div>\
                                                            <div class="unit-body">\
                                                                <div>\
                                                                    <div class="group-xs group-middle">\
                                                                        <b>Quantité:</b>\
                                                                        <div class="table-cart-stepper">\
                                                                            <input class="input" type="number" name="qty_'+entry.product_id+'" data-zeros="true" value="1" min="1" max="1000"/>\
                                                                        </div>\
                                                                    </div>\
                                                                    <div class="group-xs group-middle">\
                                                                        <b>&nbsp;&nbsp;&nbsp;&nbsp; Emballage:</b>\
                                                                        <label class="">\
                                                                            <input name="pack_'+entry.product_id+'" value="50g" type="radio">50g\
                                                                        </label>\
                                                                        <label class="">\
                                                                            <input name="pack_'+entry.product_id+'" value="100g" type="radio">100g\
                                                                        </label>\
                                                                        <label class="">\
                                                                            <input name="pack_'+entry.product_id+'" value="500g" type="radio">500g\
                                                                        </label>\
                                                                        <label class="">\
                                                                            <input name="pack_'+entry.product_id+'" value="box" type="radio">box\
                                                                        </label>\
                                                                    </div>\
                                                                </div>\
                                                            </div>\
                                                        </div>\
                                                    </div>';
                                        });
                
                                        //fill selected products quantities
                                        $('#quantities_block').append(block);
                
                                        //go to step 2
                                        $('#tabs-1-1').removeClass('show active');
                                        $('#tabs-1-2').addClass('show active');
                                        $('#st1').removeClass('active');
                                        $('#st2').addClass('active');
                                    },
                
                                    error: function(jqXHR, textStatus, errorThrown) {
                
                                        console.log('Status:'+jqXHR.status);
                                        console.log('Text status:'+textStatus);
                                        console.log('Error Thrown:'+errorThrown);
                                    }
                
                                    });
                                });  
                
                                // Order : STEP 2 
                                $('#msform2').on('click', function(e){
                                    //go to step 3
                                    $('#tabs-1-2').removeClass('show active');
                                    $('#tabs-1-3').addClass('show active');
                                    $('#st2').removeClass('active');
                                    $('#st3').addClass('active');
                                });
                
                            }); 
                
                </script>
        @endif
        @endif

    </body>

</html>