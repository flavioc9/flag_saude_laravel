<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Medicamentos') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('medicines.store') }}">
        @csrf
        <div class="form-group row">
            <label for="brand" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
            <div class="col-md-6">
                <input type="text" id="brand" class="form-control" name="brand" required autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="drug" class="col-md-4 col-form-label text-md-right">{{ __('Farmaco') }}</label>
            <div class="col-md-6">
                <input type="text" id="drug" class="form-control" name="drug" required autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="dose" class="col-md-4 col-form-label text-md-right">{{ __('Farmaco') }}</label>
            <div class="col-md-6">
                <input type="text" id="dose" class="form-control" name="dose" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __("Adicionar") }}
                </button>
            </div>
        </div>
    </form>
</x-app-layout>
