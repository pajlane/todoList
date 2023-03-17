<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                background-color: #343434;
                color: #EAEDF8;
                font-family: 'Poppins', sans-serif;
                text-align: center;
                padding: 150px;
            }
            form {
                margin-top: 30px;
                margin-bottom: 50px;
            }
            input {
                border: none;
                border-radius: 3px;
                padding: 5px 10px;
            }
            button[type="submit"] {
                font-family: 'Poppins', sans-serif;
                border: none;
                border-radius: 3px;
                padding: 2px 6px;
            }
            button[type="submit"]:hover {
                cursor: pointer;
            }
        </style>
    </head>
    
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

         <div style="color: white;">
         <h1 style=font-size:50px>Todo List</h1></br>

         @foreach ($listItems as $listItem)
            <div style="display:flex; max-width: 500px; margin:auto; align-items:center; min-height: 75px; flex-direction:row; justify-content: center;">
             <p>Item: {{ $listItem->name }}</p>

             <form method="post" action="{{ route('markComplete', $listItem->id) }}" accept-charset="UTF-8">
                {{ csrf_field() }}
             <button type="submit" style="margin-left: 2rem;">Mark Complete</button>
             </form>
            
            </div>
         @endforeach


            <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8">
                {{ csrf_field() }}

                <label for="listItem">New Todo Item</label><br></br>
                <input type="text" name="listItem"> <br></br>
                <button type="submit">Save Item</button>

            </form>
         </div> 

        </div>
    </body>
</html>
