<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @livewireStyles
</head>
<body>

  <header class="position-fixed w-100 d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <h3>
      Livewire Trello Clone
    </h3>
  </header>

  <main>
    <div class="pt-5 container-fluid">
      <div class="pt-5">
        <livewire:card-list />
      </div>
    </div>
  </main>
  
  <script src="{{ mix('js/app.js') }}"></script>
  @livewireScripts
</body>
</html>