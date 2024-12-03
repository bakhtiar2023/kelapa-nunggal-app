@extends('layouts.author')

@section('title','Iuran Warga')

@section('pageTitle','Iuran Warga')

@section('content')

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js" defer></script>
<script>
     function searchableSelect() {
      return {
        search: '',
        options: [],
        selected: null,
        fetchOptions() {
          if (this.search.length < 2) {
            // Jangan panggil API jika input terlalu pendek
            this.options = [];
            return;
          }

          // Contoh URL API (ganti dengan endpoint API Anda)
          const apiUrl = `https://api.example.com/search?query=${encodeURIComponent(this.search)}`;
          
          fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
              // Sesuaikan struktur data sesuai API Anda
              this.options = data.map(item => ({
                name: item.name,
                amount: item.amount
              }));
            })
            .catch(error => {
              console.error('Error fetching data:', error);
              this.options = [];
            });
        }
      };
    }
</script>
<div class="container mx-auto p-6">
    <h1 class="text-xl font-bold mb-4">Nama</h1>
    
    <!-- Searchable Select Component -->
    <div x-data="searchableSelect()" class="relative">
      <!-- Search Input -->
      <input 
        type="text" 
        x-model="search" 
        placeholder="Cari nama..." 
        @input="fetchOptions"
        class="w-full px-4 py-2 border text-gray-800 border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
      />

      <!-- Options Dropdown -->
      <ul 
        class="absolute left-0 w-full mt-2 bg-white dark:bg-gray-800 border border-gray-300 rounded shadow max-h-48 overflow-auto z-10"
        x-show="search.length > 0"
        x-transition>
        <template x-for="(option, index) in options" :key="index">
          <li 
            @click="selected = option.name; search = '';"
            class="px-4 py-2 hover:bg-green-100 cursor-pointer"
          >
            <span x-text="option.name"></span> - <span x-text="option.amount"></span>
          </li>
        </template>
        <li x-show="options.length === 0" class="px-4 py-2 text-gray-500">
          Tidak ditemukan
        </li>
      </ul>

      <!-- Selected Display -->
      <div class="mt-4">
        <p class="text-gray-600" x-show="selected">Dipilih: <strong x-text="selected"></strong></p>
      </div>
    </div>
  </div>


@endsection