<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Medicos') }}
        </h2>
    </x-slot>

    @if (Session::has("message"))
        <div class="alert alert-info">{{ Session::get("message") }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-lg-6 pull-right mb-2">
        <a class="btn btn-info" href="{{ route("medicos.create") }}" title="{{ __("Novo médico") }}">Novo médico</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <td>{{ __('Nome') }}</td>
                <td>{{ __('Morada') }}</td>
                <td>{{ __('Telefone') }}</td>
                <td>{{ __('Ações') }}</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($medicos as $medico )
            <tr>
                <td>{{ $medico->name ?? '' }}</td>
                <td>{{ $medico->address ?? '' }}</td>
                <td>{{ $medico->phone ?? '' }}</td>
                <td>
                    <a class="btn btn-small btn-success" href="{{ route("medicos.show",$medico->id)}}"><i class="fa fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</x-app-layout>
