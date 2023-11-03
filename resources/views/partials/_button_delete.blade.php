<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $project->id }}">
    <i class="fa-solid fa-trash-can-arrow-up" style="color: #9a1313;"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="deleteModal-{{ $project->id }}" tabindex="-1"
    aria-labelledby="deleteModal-{{ $project->id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteModal-{{ $project->id }}Label">Delete File
                    "<strong>{{ $project->name }}</strong>"
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di vole cancellare "<strong>{{ $project->name }}</strong>" dalla tua lista?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ANNULLA</button>
                <form action="{{ route('admin.projects.destroy', $project) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">ELIMINA</button>
                </form>
            </div>
        </div>
    </div>
</div>
