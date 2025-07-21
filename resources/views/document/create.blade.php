
 @vite('resources/css/app.css')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Add Person</h2>
    <form action="{{url('/store')}}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2" for="name">Name</label>
            <input type="text" id="name" name="name" required
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2" for="email">Email</label>
            <input type="email" id="email" name="email" required
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2" for="mobile">Mobile</label>
            <input type="text" id="mobile" name="mobile" required
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2" for="mobile">password</label>
            <input type="password" id="password" name="password" required
                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <button type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition duration-200">
            Submit
        </button>
    </form>
</div>
