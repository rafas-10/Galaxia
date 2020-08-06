<div class="col-md-6">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-images"></i> Galería</h1>
        </div> <!-- Header -->    
        <div class="inside">
            <div class="form-check">
                <input type="checkbox" value="true" name="galeria" @if(kvfj($u->permissions, 'galeria')) checked @endif>
                <label for="galeria"> Puede ver la galería.</label>
            </div>                
        </div><!-- Inside -->
    </div><!-- Panel Shadow -->
</div><!-- Col-md-4 -->