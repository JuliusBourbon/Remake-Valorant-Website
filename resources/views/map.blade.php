<style>
    /* Menggunakan Tailwind untuk scrollbar */
    .scrollbar-thin::-webkit-scrollbar {
        width: 8px; /* Lebar scrollbar */
        height: 8px; /* Tinggi scrollbar */
    }

    .scrollbar-thin::-webkit-scrollbar-thumb {
        background-color: #c53030; /* Warna merah (red-600) */
        border-radius: 10px; /* Membuat sudut yang lebih halus */
    }

    .scrollbar-thin::-webkit-scrollbar-track {
        background: transparent; /* Latar belakang track scrollbar */
    }

    /* Menghapus tombol scroll */
    .scrollbar-thin::-webkit-scrollbar-button {
        display: none; /* Menghilangkan tombol scroll */
    }

    /* Untuk Firefox */
    .scrollbar-thin {
        scrollbar-width: thin; /* Lebar scrollbar */
        scrollbar-color: #c53030 transparent; /* Warna scrollbar dan track */
    }

    /* Pastikan scrollbar utama tetap normal */
    body::-webkit-scrollbar {
        width: auto; /* Lebar scrollbar utama tetap auto */
    }

    body {
        scrollbar-width: auto; /* Lebar scrollbar utama tetap auto di Firefox */
    }


</style>

<x-main>
    <x-slot:title>{{ $title }}</x-slot>
    <x-slot:background>bg-orange-50</x-slot:background>
    <section class="bg-orange-50">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-20">
                <h2 class="mb-4 text-5xl tracking-tight font-extrabold text-gray-900">Map</h2>
            </div> 

            <div class="mb-16">
                <div class="grid gap-10 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 cursor-default items-center border-0 border-red-600">
                    <img id="mainImage1" src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/5101e4ee241fbfca261bf8150230236c46c8b991-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="" class="w-full">
    
                    <div>
                        <h1 class="mb-7 font-bold text-3xl">SUNSET</h1>
                        <p class="text-lg">A disaster at a local Kingdom facility has the potential to wreak havoc on the surrounding area. Visit your favorite food truck, then battle your way across the city in this traditional three-lane map.</p>
                    </div>
                </div>
    
                <div class="overflow-x-auto scrollbar-thin">
                    <div class="flex space-x-4 mt-8 mb-4 h-12">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/5101e4ee241fbfca261bf8150230236c46c8b991-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="Gambar" class="w-20 cursor-pointer" onclick="changeImage('mainImage1', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/5101e4ee241fbfca261bf8150230236c46c8b991-3840x2160.png?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/699c33a4ee5f5daf71e87c0f3bf6ddf6995b4bb3-2000x2000.jpg?auto=format&fit=fill&q=80&w=1504" alt="Gambar 1" class="w-20 cursor-pointer" onclick="changeImage('mainImage1', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/699c33a4ee5f5daf71e87c0f3bf6ddf6995b4bb3-2000x2000.jpg?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/ca3eab735bbde5d7930ec5845eff19becb46a86b-915x515.jpg?auto=format&fit=fill&q=80&w=915" alt="Gambar 2" class="w-20 cursor-pointer" onclick="changeImage('mainImage1', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/ca3eab735bbde5d7930ec5845eff19becb46a86b-915x515.jpg?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/c88e8f8d5715c85b3d623bd6935e44dfcd99ff49-915x515.png?auto=format&fit=fill&q=80&w=915" alt="Gambar 3" class="w-20 cursor-pointer" onclick="changeImage('mainImage1', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/c88e8f8d5715c85b3d623bd6935e44dfcd99ff49-915x515.png?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/0749044db042a158fcaf2e24849ca5adfedadc71-915x515.png?auto=format&fit=fill&q=80&w=915" alt="Gambar 4" class="w-20 cursor-pointer" onclick="changeImage('mainImage1', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/0749044db042a158fcaf2e24849ca5adfedadc71-915x515.png?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/1fec41a14fbe7442bbe47ede2b20792eed8c89b8-915x515.png?auto=format&fit=fill&q=80&w=915" alt="Gambar 5" class="w-20 cursor-pointer" onclick="changeImage('mainImage1', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/1fec41a14fbe7442bbe47ede2b20792eed8c89b8-915x515.png?auto=format&fit=fill&q=80&w=915')">
                    </div>
                </div>
                
            </div>

            <div class="mb-16">
                <div class="grid gap-10 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 cursor-default items-center border-0 border-red-600">
                    <img id="mainImage2" src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/cad0b406c5924614083a8dc9846b0a8746a20bda-703x396.webp?auto=format&fit=fill&q=80&w=703" alt="" class="w-full">
    
                    <div>
                        <h1 class="mb-7 font-bold text-3xl">LOTUS</h1>
                        <p class="text-lg">A mysterious structure housing an astral channel that radiates ancient power. Large stone doors provide ample opportunities for movement and open the way to three mysterious sites.
                        </p>
                    </div>
                </div>
    
                <div class="overflow-x-auto scrollbar-thin">
                    <div class="flex space-x-4 mt-8 mb-4 h-12">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/cad0b406c5924614083a8dc9846b0a8746a20bda-703x396.webp?auto=format&fit=fill&q=80&w=703" alt="Gambar" class="w-20 cursor-pointer" onclick="changeImage('mainImage2', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/cad0b406c5924614083a8dc9846b0a8746a20bda-703x396.webp?auto=format&fit=fill&q=80&w=703')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/184522bbaddef735787cc3a374663aa2ac18397f-395x393.webp?auto=format&fit=fill&q=80&w=395" alt="Gambar 1" class="w-20 cursor-pointer" onclick="changeImage('mainImage2', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/184522bbaddef735787cc3a374663aa2ac18397f-395x393.webp?auto=format&fit=fill&q=80&w=395')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/72244f5326bac4cc17cc3e3f6d7c5831ea573abc-703x396.webp?auto=format&fit=fill&q=80&w=703" alt="Gambar 2" class="w-20 cursor-pointer" onclick="changeImage('mainImage2', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/72244f5326bac4cc17cc3e3f6d7c5831ea573abc-703x396.webp?auto=format&fit=fill&q=80&w=703')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/42d4a5aeb56a7ebe5b2a0de331245c2fe65dcd89-915x515.jpg?auto=format&fit=fill&q=80&w=915" alt="Gambar 3" class="w-20 cursor-pointer" onclick="changeImage('mainImage2', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/42d4a5aeb56a7ebe5b2a0de331245c2fe65dcd89-915x515.jpg?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/d7d08f63ee2c4e10da770a6f1f828720bfd3313c-915x515.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 4" class="w-20 cursor-pointer" onclick="changeImage('mainImage2', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/d7d08f63ee2c4e10da770a6f1f828720bfd3313c-915x515.webp?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/3bf87877f0918085296a5390ff8a53a5ea997a9c-915x515.jpg?auto=format&fit=fill&q=80&w=915" alt="Gambar 5" class="w-20 cursor-pointer" onclick="changeImage('mainImage2', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/3bf87877f0918085296a5390ff8a53a5ea997a9c-915x515.jpg?auto=format&fit=fill&q=80&w=915')">
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <div class="grid gap-10 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 cursor-default items-center border-0 border-red-600">
                    <img id="mainImage3" src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/0089861662b41c8d5c3c4f1c14cb4d1937936105-915x515.webp?auto=format&fit=fill&q=80&w=915" alt="" class="w-full">
    
                    <div>
                        <h1 class="mb-7 font-bold text-3xl">PEARL</h1>
                        <p class="text-lg">The Offensive Team pushes into the Defense Team’s area on 
                            a two-location map set in a bustling underwater city. Pearl is a geography-based map with no mechanics. 
                            Take action through the congested mid lane or the farther flanks on the first map set on Omega Earth.
                        </p>
                    </div>
                </div>
    
                <div class="overflow-x-auto scrollbar-thin">
                    <div class="flex space-x-4 mt-8 mb-4 h-12">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/0089861662b41c8d5c3c4f1c14cb4d1937936105-915x515.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar" class="w-20 cursor-pointer" onclick="changeImage('mainImage3', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/0089861662b41c8d5c3c4f1c14cb4d1937936105-915x515.webp?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/be184dc3571a4c3efb44701fee72e1149021c591-515x515.webp?auto=format&fit=fill&q=80&w=515" alt="Gambar 1" class="w-20 cursor-pointer" onclick="changeImage('mainImage3', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/be184dc3571a4c3efb44701fee72e1149021c591-515x515.webp?auto=format&fit=fill&q=80&w=515')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/34ba319c99d3d20ef8c6f7b6a61439e207b39247-915x515.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 2" class="w-20 cursor-pointer" onclick="changeImage('mainImage3', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/34ba319c99d3d20ef8c6f7b6a61439e207b39247-915x515.webp?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/f14087492fb40816aaeb3f2e2e310f98805e5c16-915x515.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 3" class="w-20 cursor-pointer" onclick="changeImage('mainImage3', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/f14087492fb40816aaeb3f2e2e310f98805e5c16-915x515.webp?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/e4c864fa4607f1f356edcb7f6cc8782dc400793c-915x515.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 4" class="w-20 cursor-pointer" onclick="changeImage('mainImage3', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/e4c864fa4607f1f356edcb7f6cc8782dc400793c-915x515.webp?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/445feec31c832def5824d5a1da13fb7756cc71ed-915x515.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 5" class="w-20 cursor-pointer" onclick="changeImage('mainImage3', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/445feec31c832def5824d5a1da13fb7756cc71ed-915x515.webp?auto=format&fit=fill&q=80&w=915')">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function changeImage(mainImageId, newSrc) {
            document.getElementById(mainImageId).src = newSrc;
        }
    </script>
</x-main>
