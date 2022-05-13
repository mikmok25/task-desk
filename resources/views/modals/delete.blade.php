<form action="{{ route('todo.destroy', $todo->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="ModalDelete{{$todo->id}}" data-bs-backdrop="static"
        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"><strong>Alert!</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                     Are you sure you want to delete <strong>{{$todo->title}}</strong>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>

                    {{-- <button type="button" class="btn btn-primary">Understood</button> --}}

</form>
