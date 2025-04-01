<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bootstrap Test') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Bootstrap Components Test -->
                    <div class="alert alert-primary" role="alert">
                        This is a Bootstrap alert!
                    </div>

                    <button class="btn btn-primary">Bootstrap Button</button>

                    <div class="card mt-4" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Bootstrap Card</h5>
                            <p class="card-text">If you can see this styled card, Bootstrap is working!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 