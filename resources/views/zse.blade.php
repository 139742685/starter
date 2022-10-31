<?php $name = 'maher'; ?>
@if($name == 'maher')

<p>yes i am maher</p>

@elseif($name == 'yasin')

<p>yes i am yasin</p>

@else
<p>no thing</p>

@endif

================================================================

<?php $data = ['AA' , 'BB' , 'CC']; ?>

@forelse($data as $ddd)
<p>
    {{ $ddd }}
</p>
@empty
<p>empty array</p>
@endforelse