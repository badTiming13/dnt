@props(['fields', 'values', 'model'])

<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            @foreach ($fields as $field)
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                    {{ $field }}
                </th>
            @endforeach
            <th class="px-6 py-3 bg-gray-50"></th> <!-- Empty header for edit and delete icons -->
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach ($values as $row)
            <tr>
                @foreach ($row as $value)
                    <td class="px-6 py-4 whitespace-no-wrap">
                        {{ $value }}
                    </td>
                @endforeach
                <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">
                    <a href="{{ route($model . '.edit', $row[0]) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                    <span class="text-gray-400"> | </span>
                    <a href="{{ route($model . '.delete', $row[0]) }}" class="text-red-600 hover:text-red-900"  onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
