<div class="flex space-x-2">
    <a href="{{ route('admin.roles.edit.page', $role->id) }}"
       class="text-blue-600 hover:underline text-sm">
       <iconify-icon icon="uil:edit" width="24" height="24"></iconify-icon>
    </a>

    <a href="{{ route('admin.roles.delete', $role->id) }}"
        class="alert-text-red-600 hover:underline text-sm"
        onclick="return confirm('Are you sure you want to delete this role?');">
        <iconify-icon icon="fluent:delete-32-regular" width="24" height="24"></iconify-icon>
     </a>

    <a  href="{{ route('admin.roles.permissions',$role->id) }}" 
       class="text-yellow-600 hover:underline text-sm">
       <iconify-icon icon="fluent:key-24-regular" width="24" height="24"></iconify-icon>
    </a>
</div>
