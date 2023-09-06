<div>
     @if (session()->has('message'))
         {{ session('message')}}
     @endif
    @foreach ($learningMaterials as $material)
        <div>
            <a href="/learning-materials/single/{{ $material->id }}">
                <h1> {{ $material->title }} </h1>
            </a>
            <p> {{ $material->content }} </p>
        </div>
    @endforeach
    <div>
        <?php echo $learningMaterials->render(); ?>
    </div>
</div>
