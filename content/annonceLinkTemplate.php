<div class="col-md-4">
    <div class="card mb-4 shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        <div class="card-body">
            <p class="card-text"><?php echo $annonce[titre];?></p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="<?php echo "detailsAnnonce.php?id=".$annonce[id]." "; ?>"><button type="button" class="btn btn-sm btn-outline-secondary">Voir l'annonce</button></a>
                </div>
                <small class="text-muted">Prix</small>
                <small class="text-muted">Datetime ajout</small>
            </div>
        </div>
    </div>
</div>