<section>
<form action="?" class="container">

<div class="form-group row">
    <div class="col-8">
        <input name="url" class="form-control" type="text" placeholder="https://vimeo.com/xxxxxxxxx или https://www.youtube.com/watch?v=xxxxxxxxxxx" value="<?=$url?>">
    </div>

    <div class="col-4 text-right">
        <button type="submit" class="btn btn-primary">Сгенерировать код</button>
    </div>
</div>


<textarea id="textarea" class="form-control height-60">
<?php if($url): ?>
<figure class="figure d-block">
    <div class="video-cover box-shadow">
        <img alt="<?=$title?>" src="<?=$image?>" class="bg-image"/>
        <div class="video-play-icon">
            <i class="icon-controller-play"></i>
        </div>
        <div class="embed-responsive embed-responsive-<?=$resolution?>">
            <iframe class="embed-responsive-item" data-src="<?=$url?>?&autoplay=1" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </div>
    <figcaption class="figure-caption text-right"><?=$title?><br>© <?=$author?> <?=$date?></figcaption>
</figure>
<?php endif ?>
</textarea>

</form>
</section>