<table class="mb-0 table table-hover">
    <thead>
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Nome Progetto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Data Creazione</th>
            <th scope="col">Ultima Modifica</th>
            <th scope="col">Admin Mode</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td scope="col">{{ $project->name }}</td>
                <td scope="col">{{ $project->category?->label }}</td>
                <td scope="col">{{ mb_strimwidth($project->description, 0, 50, '...') }}</td>
                <td scope="col">{{ $project->created_at }}</td>
                <td scope="col">{{ $project->updated_at }}</td>
                <td scope="col">
                    <div class="d-flex align-items-center">
                        <div>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn mx-1">
                                <i class="fa-solid fa-pencil" style="color: #1f2e51;"></i>
                            </a>
                        </div>
                        <div>
                            <a href="{{ route('admin.projects.show', $project) }}" class="btn mx-1">
                                <i class="fa-solid fa-eye" style="color: #4d94e7;"></i>
                            </a>
                        </div>
                        <div>
                            @include('partials._button_delete')
                        </div>
                    </div>
                </td>
            </tr>
        @empty
            <h2>NOT FOUND</h2>
        @endforelse
    </tbody>
</table>
