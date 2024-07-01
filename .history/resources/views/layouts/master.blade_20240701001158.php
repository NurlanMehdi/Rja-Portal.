@include('partials.header')

<div id="app">
<main id="main" class="main">
@yield('content')
</main>
   
</div>
@livewire('rja')
@include('partials.footer')
