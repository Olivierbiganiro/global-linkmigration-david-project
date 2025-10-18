<?php

namespace App\Livewire\User\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ServicesLivewire extends Component
{
    use WithPagination, WithFileUploads;

    public $search = '';
    public $sortField = 'created_at';
    public $sortDirection = 'desc';
    public $perPage = 10;

    // Form fields
    public $serviceId;
    public $name = '';
    public $description = '';
    public $price = '';
    public $image;
    public $status = true;
    public $existingImage = '';

    // Modal states
    public $showModal = false;
    public $showDeleteModal = false;
    public $deleteId;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'image' => 'nullable|image|max:2048',
        'status' => 'boolean',
    ];

    protected $messages = [
        'name.required' => 'Service name is required.',
        'name.max' => 'Service name must not exceed 255 characters.',
        'description.required' => 'Service description is required.',
        'price.required' => 'Service price is required.',
        'price.numeric' => 'Service price must be a number.',
        'price.min' => 'Service price must be at least 0.',
        'image.image' => 'File must be an image.',
        'image.max' => 'Image size must not exceed 2MB.',
    ];

    public function mount()
    {
        $this->resetForm();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
        $this->resetPage();
    }

    public function create()
    {
        $this->resetForm();
        $this->showModal = true;
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $this->serviceId = $service->id;
        $this->name = $service->name;
        $this->description = $service->description;
        $this->price = $service->price;
        $this->existingImage = $service->image;
        $this->status = $service->status;
        $this->showModal = true;
    }

    public function save()
    {
        $this->validate();

        $data = [
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'status' => $this->status,
        ];

        // Handle image upload
        if ($this->image) {
            // Delete existing image if updating
            if ($this->serviceId && $this->existingImage) {
                Storage::disk('public')->delete($this->existingImage);
            }

            $data['image'] = $this->image->store('services', 'public');
        } elseif ($this->serviceId) {
            // Keep existing image if no new image uploaded
            $data['image'] = $this->existingImage;
        }

        if ($this->serviceId) {
            Service::findOrFail($this->serviceId)->update($data);
            session()->flash('message', 'Service updated successfully.');
        } else {
            Service::create($data);
            session()->flash('message', 'Service created successfully.');
        }

        $this->closeModal();
    }

    public function delete($id)
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function confirmDelete()
    {
        $service = Service::findOrFail($this->deleteId);

        // Delete image file if exists
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();
        session()->flash('message', 'Service deleted successfully.');
        $this->closeDeleteModal();
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm();
    }

    public function closeDeleteModal()
    {
        $this->showDeleteModal = false;
        $this->deleteId = null;
    }

    public function resetForm()
    {
        $this->serviceId = null;
        $this->name = '';
        $this->description = '';
        $this->price = '';
        $this->image = null;
        $this->existingImage = '';
        $this->status = true;
        $this->resetErrorBag();
    }

    public function render()
    {
        $services = Service::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                      ->orWhere('description', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate($this->perPage);

        return view('livewire.user.admin.services.services-livewire', compact('services'))
            ->layout('layouts.app');
    }
}
