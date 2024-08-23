<div class="modal fade text-left" id="deletetModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="deletetModalLabel{{ $user->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="deletetModalLabel{{ $user->id }}">Delete Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Are you sure you want to delete this data?</h5>
                <p>If yes, choose 'Delete' to remove the data.</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('user_destroy', $user->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
