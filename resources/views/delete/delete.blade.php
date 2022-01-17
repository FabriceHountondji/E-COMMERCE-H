<a href="#" title="Supprimer" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#{{ $modal_id }}">
    <i class="fa fa-trash"></i> @if(!(isset($lite) && $lite)) Supprimer @endif
</a>
 
 <!-- Modal -->
 <div class="modal fade" id="{{ $modal_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $modal_id }}">Modal de suppression</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ $url }}" method="POST">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                
                <div class="modal-body">
                
                    <div class="alert alert-danger alert-sm">
                        Confirmer vous vraiment la <b>suppression</b> ?
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button title="Supprimer" type="submit" class="btn btn-danger">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>