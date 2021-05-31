<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Medicos') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route("medicos.store") }}">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __("Nome") }}</label>
            <div class="col-md-6">
                <input type="text" name="name" id="name" class="form-control" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __("Morada") }}</label>
            <div class="col-md-6">
                <input type="text" name="address" id="address" class="form-control" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __("Telefone") }}</label>
            <div class="col-md-6">
                <input type="text" name="phone" id="phone" class="form-control" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6">
                <button type="submit" class="btn btn-primary">
                    {{ __("Adicionar") }}
                </button>
            </div>
        </div>
    </form>
</x-app-layout>
