<x-app-layout>
    <div class="w-3/4 mx-auto my-6">
        <div class="bg-white p-10">
            <form action="{{ route('estados.update',['categoria'=>$categoria->id]) }}" method="post">
                @method('put')
                @csrf
                @include('Estados.partials.form')
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar
                </button>
            </form>
        </div>
    </div>
</x-app-layout>