<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ရှောင်</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        @font-face{
            font-family: uni;
            src: url('../../p.ttf');
        }
        #app{
            font-family: uni;
        }
        #cardBody{
            height: 100vh; /* Fallback for browsers that do not support Custom Properties */
            height: calc(var(--vh, 1vh) * 100);
            padding-top: 100px;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid">
        <div class="card shadow mt-2">
            <div class="card-body text-center" id="cardBody">                 
                    
                    <div class="row mb-5">
                        <div class="col-4 offset-4 col-sm-2 offset-sm-5">
                            <img class="img-fluid" src="{{URL::to('loading.gif')}}" alt="Loading...">
                        </div>
                    </div>
                    <h5 style="color: #075c6b">တွဲဖက်၍မစားသုံးသင့်တဲ့အစားအစာများ</h5>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        setTimeout(function(){
            window.location.replace("/foods-list");
        }, 5000)
    </script>
</body>
</html>