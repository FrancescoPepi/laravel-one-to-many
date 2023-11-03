<div class="col-6 mx-auto">
    <div class="card">
        <div class="card-header text-center">
            <h4>
                {{ $project->name }}
            </h4>
        </div>
        <div class="card-body">
            <div class="col">
                <strong>Nome Progetto: </strong>
                {{ $project->name }}
            </div>
            <div class="col">
                <strong>Categoria: </strong>
                {{ $project->category ? $project->category->label : 'nessuna categoria' }}
            </div>
            <div class="col">
                <strong>Slug del Progetto: </strong>
                {{ $project->slug }}
            </div>
            <div class="col-12 mt-2">
                <strong>Descrizione: </strong>
                {{ $project->description }}
            </div>
        </div>
    </div>
</div>
