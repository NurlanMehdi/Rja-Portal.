@include('partials.header')

<div id="app">
<main id="main" class="main">
@yield('content')
</main>
@livewire('rja-form')
</div>

@include('partials.footer')
