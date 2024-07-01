@include('partials.header')

<div id="app">
<main id="main" class="main">
@yield('content')
@livewire('rja')
</main>
   
</div>

@include('partials.footer')
