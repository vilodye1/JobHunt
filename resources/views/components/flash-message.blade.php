@if(session()->has('message'))
{{-- x-data, x-init, x-show are Alpine-js directives that will allow the flash message to disappear after a certain time --}}
    <div x-data="{show:true}" x-init="setTimeout(()=> show = false, 3000)" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif