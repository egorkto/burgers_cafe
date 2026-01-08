<?php
$src = '';
if ($file) {
    if (in_array($file->extension(), $previewableMimes)) {
        $src = $file->temporaryUrl();
    }
} elseif ($productImageFileName) {
    $src = asset(asset('storage/product/images/' . $productImageFileName));
}
?>

<div>
    <label for="image" class="form-label">{{ __('Upload image:') }}</label>
    <br>
    <img src="{{ $src }}" alt="{{ __('Product image preview') }}" style="width: 100%" class="mb-2">
    <input class="form-control" type="file" id="image" name="{{ $fieldName }}" wire:model="file">
</div>
