<x-layouts.app>
    <div class="max-w-2xl mx-auto px-4 py-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Student Details</h1>
            <a href="{{ route('students.index') }}" class="text-gray-600 hover:text-gray-900">
                &larr; Back to List
            </a>
        </div>

        <div class="bg-white shadow rounded-lg border border-gray-200 overflow-hidden">
            <div class="p-6 space-y-4">
                <div class="border-b border-gray-100 pb-3">
                    <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider">Full Name</span>
                    <span class="text-lg font-medium text-gray-900">{{ $student->name }}</span>
                </div>

                <div class="border-b border-gray-100 pb-3">
                    <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider">Email Address</span>
                    <span class="text-base text-gray-700">{{ $student->email }}</span>
                </div>

                <div class="border-b border-gray-100 pb-3">
                    <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider">Phone Number</span>
                    <span class="text-base text-gray-700">{{ $student->phone }}</span>
                </div>

                <div class="border-b border-gray-100 pb-3">
                    <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider">Date of Birth</span>
                    <span class="text-base text-gray-700">{{ $student->date_of_birth ?? 'Not Provided' }}</span>
                </div>

                <div>
                    <span class="block text-xs font-semibold text-gray-400 uppercase tracking-wider">Created At</span>
                    <span class="text-sm text-gray-500">{{ $student->created_at->format('M d, Y h:i A') }}</span>
                </div>
            </div>

            <div class="bg-gray-50 px-6 py-4 flex justify-between items-center border-t border-gray-200">
                <x-delete-form :action="route('students.destroy', $student->id)" />

                <div class="space-x-2">
                    <a href="{{ route('students.edit', $student->id) }}" class="px-4 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700">
                        Edit Student
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>