<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ရှောင်</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fa/css/all.css')}}">
    <style>
        @font-face{
            font-family: uni;
            src: url('../../p.ttf');
        }
        #app{
            font-family: uni;
        }
        #cardBody{
            min-height: 100vh; /* Fallback for browsers that do not support Custom Properties */
            min-height: calc(var(--vh, 1vh) * 100);
          
        }
       
        .inner-header{
           
                    
            font-size: 18px;
            color: #f6d12c;
           
            
        }
       .back_btn{
           color: #0063ab;
           position: absolute;
           top: 25px;
           left: 20px;
           display: block;
           background: #fff;
           width: 30px;
           height: 30px;
           border-radius: 30px;
           text-align: center;
           line-height: 30px;

       }
    </style>
</head>
<body>
   
    
       
        
        <div class="card" style=" background: #0063ab">
            <div class="card-body" id="cardBody">
                <div class="fixed-top">                    
                    <div class="inner-header mt-4 pl-5 pl-sm-0 ml-5 text-left text-sm-center">                       
                        တွဲဖက်၍မစားသုံးသင့်တဲ့အစားအစာများ
                    </div>
                    <a href="{{route('foods.list')}}" class="back_btn"><i class="fas fa-arrow-circle-left"></i></a>
                </div>      
               {{-- <h5 style="color: #075c6b" class="text-center">တွဲဖက်၍မစားသင့်သောအစားအစာများ</h5> --}}
               <div class="row mt-5">
               
                    <div class="col-12">
                        <form method="get" action="{{route('search.now')}}">
                            <div class="input-group input-group-lg mb-3">
                                <input type="search" name="q" class="form-control" placeholder="Search" required>
                                <div class="input-group-append">
                                  <button class="input-group-text" type="submit">
                                    <i class="fas fa-search"></i>
                                  </span>
                                </div>
                              </div>
                          </form>
                    </div>

                    @if($q)
                    <div class="col-12 col-sm-4 text-white-50">Search result for : <strong>{{$q}}</strong></div>
                    @endif
                        
               </div>
                <div class="row">
                @foreach($foods as  $f)
                   
                        <div class="col-12 col-sm-3 mb-2 mt-2">
                            <div class="card">
                                <div style="padding: 10px 5px 10px 5px;">
                                    <div class="row">
                                        <div class="col-4">
                                            {{$f->first_food_name}}
                                        </div>                                       
                                        <div class="col-4">
                                            {{$f->second_food_name}}
                                        </div>
                                        <div class="col-4 text-danger">
                                            {{$f->cat->category_name}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                @endforeach
            </div>
            </div>
        </div>


    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>