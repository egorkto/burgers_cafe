<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ReactImageChoice extends Component
{
    use WithFileUploads;

    public $productImageFileName;
    public $file;
    public $fieldName;
    public $previewableMimes = [];

    public function mount($imageFileName, $field)
    {
        $this->productImageFileName = $imageFileName;
        $this->fieldName = $field;
        $this->previewableMimes = config('livewire.temporary_file_upload')['preview_mimes'];
    }

    public function render()
    {
        return view('livewire.react-image-choice');
    }
}
