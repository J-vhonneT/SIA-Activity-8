<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['name']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['name']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php
$initial = strtoupper(substr($name, 0, 1));
?>


<div style="
width:40px;
height:40px;
border-radius:50%;
background:#4f46e5;
color:white;
display:flex;
align-items:center;
justify-content:center;
font-weight:bold;
font-size:18px;">
    <?php echo e($initial); ?>

</div><?php /**PATH C:\Users\user\SIA-Activity-8\resources\views/components/avatar.blade.php ENDPATH**/ ?>