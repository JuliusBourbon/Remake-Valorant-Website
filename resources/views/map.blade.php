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

            <div class="mb-16">
                <div class="grid gap-10 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 cursor-default items-center border-0 border-red-600">
                    <img id="mainImage4" src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/983a6d66978aabd3ccd4e51517298d9a0b5467d9-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="" class="w-full">
    
                    <div>
                        <h1 class="mb-7 font-bold text-3xl">Fracture</h1>
                        <p class="text-lg">A top-secret research facility has been devastated by a failed radianite experiment. With defense options as divided as the map, the choice is yours: meet the attackers on their own turf or prepare for an onslaught.
                        </p>
                    </div>
                </div>
    
                <div class="overflow-x-auto scrollbar-thin">
                    <div class="flex space-x-4 mt-8 mb-4 h-12">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/983a6d66978aabd3ccd4e51517298d9a0b5467d9-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="Gambar" class="w-20 cursor-pointer" onclick="changeImage('mainImage4', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/983a6d66978aabd3ccd4e51517298d9a0b5467d9-3840x2160.png?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/d7916de5399e878e06bc20bb4a36f5b8a8637050-515x515.webp?auto=format&fit=fill&q=80&w=515" alt="Gambar 1" class="w-20 cursor-pointer" onclick="changeImage('mainImage4', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/d7916de5399e878e06bc20bb4a36f5b8a8637050-515x515.webp?auto=format&fit=fill&q=80&w=515')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/aecf502b1eea8824fd1fa9f8a2450bc5c13f6910-915x515.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 2" class="w-20 cursor-pointer" onclick="changeImage('mainImage4', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/aecf502b1eea8824fd1fa9f8a2450bc5c13f6910-915x515.webp?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/721d78903d31f5db9384082f77b80054990c4b74-915x515.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 3" class="w-20 cursor-pointer" onclick="changeImage('mainImage4', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/721d78903d31f5db9384082f77b80054990c4b74-915x515.webp?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/a78235eabe17f34f698305fb34f1123fa459e33f-915x515.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 4" class="w-20 cursor-pointer" onclick="changeImage('mainImage4', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/a78235eabe17f34f698305fb34f1123fa459e33f-915x515.webp?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/646fec084f46b28bd533d9e4b1d5725101d0ba68-915x515.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 5" class="w-20 cursor-pointer" onclick="changeImage('mainImage4', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/646fec084f46b28bd533d9e4b1d5725101d0ba68-915x515.webp?auto=format&fit=fill&q=80&w=915')">
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <div class="grid gap-10 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 cursor-default items-center border-0 border-red-600">
                    <img id="mainImage5" src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/a4a0374222f9cc79f97e03dbb1122056e794176a-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="" class="w-full">
    
                    <div>
                        <h1 class="mb-7 font-bold text-3xl">Breeze</h1>
                        <p class="text-lg">Explore historic ruins or seaside caves in this tropical paradise. Don't forget to pack protective gear for when you're out in the open and fighting at range. Keep an eye on your surroundings so you can relax in the Breeze.</p>
                    </div>
                </div>
    
                <div class="overflow-x-auto scrollbar-thin">
                    <div class="flex space-x-4 mt-8 mb-4 h-12">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/a4a0374222f9cc79f97e03dbb1122056e794176a-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="Gambar" class="w-20 cursor-pointer" onclick="changeImage('mainImage5', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/a4a0374222f9cc79f97e03dbb1122056e794176a-3840x2160.png?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/e6e2959c79eb2754219fa250248d78acc5e218c3-515x515.webp?auto=format&fit=fill&q=80&w=515" alt="Gambar 1" class="w-20 cursor-pointer" onclick="changeImage('mainImage5', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/e6e2959c79eb2754219fa250248d78acc5e218c3-515x515.webp?auto=format&fit=fill&q=80&w=515')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/ca4fd80fd44315849c52adcc6aeec4e0617a0a35-915x504.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 2" class="w-20 cursor-pointer" onclick="changeImage('mainImage5', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/ca4fd80fd44315849c52adcc6aeec4e0617a0a35-915x504.webp?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/5df1cb817110ec8d785ac6bd6d927131e454ab96-915x504.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 3" class="w-20 cursor-pointer" onclick="changeImage('mainImage5', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/5df1cb817110ec8d785ac6bd6d927131e454ab96-915x504.webp?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/09fd06d90139cc800a6b0fe25ce465dbb38ad217-915x504.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 4" class="w-20 cursor-pointer" onclick="changeImage('mainImage5', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/09fd06d90139cc800a6b0fe25ce465dbb38ad217-915x504.webp?auto=format&fit=fill&q=80&w=915')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/fd774489b1095dd34b8d99c68c791a79f75191e4-915x504.webp?auto=format&fit=fill&q=80&w=915" alt="Gambar 5" class="w-20 cursor-pointer" onclick="changeImage('mainImage5', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/fd774489b1095dd34b8d99c68c791a79f75191e4-915x504.webp?auto=format&fit=fill&q=80&w=915')">
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <div class="grid gap-10 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 cursor-default items-center border-0 border-red-600">
                    <img id="mainImage6" src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/72853f583a0f6b25aed54870531756483a7b61de-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="" class="w-full">
    
                    <div>
                        <h1 class="mb-7 font-bold text-3xl">Icebox</h1>
                        <p class="text-lg">Your next battlefield is the Kingdom's secret excavation site covered in arctic ice. Both factory sites are covered in snow and metal, requiring horizontal prowess. Use the zipline and your enemies won't see you coming. Your next battlefield is the Kingdom's secret excavation site covered in arctic ice. Both factory sites are covered in snow and metal, requiring horizontal prowess. Use the zipline and your enemies won't see you coming.</p>
                    </div>
                </div>
    
                <div class="overflow-x-auto scrollbar-thin">
                    <div class="flex space-x-4 mt-8 mb-4 h-12">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/72853f583a0f6b25aed54870531756483a7b61de-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="Gambar" class="w-20 cursor-pointer" onclick="changeImage('mainImage6', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/72853f583a0f6b25aed54870531756483a7b61de-3840x2160.png?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/421063d481e9e1b2b5f2f834f53b7512f77413b9-2000x2000.jpg?auto=format&fit=fill&q=80&w=1504" alt="Gambar 1" class="w-20 cursor-pointer" onclick="changeImage('mainImage6', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/421063d481e9e1b2b5f2f834f53b7512f77413b9-2000x2000.jpg?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/91422206c56df7177495b96a26021d6379de8079-1980x1083.jpg?auto=format&fit=fill&q=80&w=1504" alt="Gambar 2" class="w-20 cursor-pointer" onclick="changeImage('mainImage6', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/91422206c56df7177495b96a26021d6379de8079-1980x1083.jpg?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/696094917f45e90323c0ea4a0947707f5ef975fa-1980x1083.jpg?auto=format&fit=fill&q=80&w=1504" alt="Gambar 3" class="w-20 cursor-pointer" onclick="changeImage('mainImage6', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/696094917f45e90323c0ea4a0947707f5ef975fa-1980x1083.jpg?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/dfe8e891d8e2f38887802f085490626972211a0c-1980x1083.jpg?auto=format&fit=fill&q=80&w=1504" alt="Gambar 4" class="w-20 cursor-pointer" onclick="changeImage('mainImage6', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/dfe8e891d8e2f38887802f085490626972211a0c-1980x1083.jpg?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/95764641b4f4c15ed7537302988685f18dfd03b3-1980x1083.jpg?auto=format&fit=fill&q=80&w=1504" alt="Gambar 5" class="w-20 cursor-pointer" onclick="changeImage('mainImage6', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/95764641b4f4c15ed7537302988685f18dfd03b3-1980x1083.jpg?auto=format&fit=fill&q=80&w=1504')">
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <div class="grid gap-10 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 cursor-default items-center border-0 border-red-600">
                    <img id="mainImage7" src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/7df1e6ee284810ef0cbf8db369c214a8cbf6578c-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="" class="w-full">
    
                    <div>
                        <h1 class="mb-7 font-bold text-3xl">Bind</h1>
                        <p class="text-lg">Two locations. No mid lane. You have to choose left or right. Which do you choose? Both offer a direct path for attackers and a pair of one-way teleporters to make flanking easier.</p>
                    </div>
                </div>
    
                <div class="overflow-x-auto scrollbar-thin">
                    <div class="flex space-x-4 mt-8 mb-4 h-12">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/7df1e6ee284810ef0cbf8db369c214a8cbf6578c-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="Gambar" class="w-20 cursor-pointer" onclick="changeImage('mainImage7', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/7df1e6ee284810ef0cbf8db369c214a8cbf6578c-3840x2160.png?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/9c2f75aa4d00022c440615ce08988c7dd5f2bb00-641x641.png?auto=format&fit=fill&q=80&w=641" alt="Gambar 1" class="w-20 cursor-pointer" onclick="changeImage('mainImage7', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/9c2f75aa4d00022c440615ce08988c7dd5f2bb00-641x641.png?auto=format&fit=fill&q=80&w=641')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/0bbf7253a3ebb3032ec8a4ace1a3d0863c75cff7-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 2" class="w-20 cursor-pointer" onclick="changeImage('mainImage7', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/0bbf7253a3ebb3032ec8a4ace1a3d0863c75cff7-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/3d2e8c9f578074b17f3836c7528630db6756c688-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 3" class="w-20 cursor-pointer" onclick="changeImage('mainImage7', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/3d2e8c9f578074b17f3836c7528630db6756c688-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/2a1bcff89a804cdceb2a42991b99fcac94f3bae7-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 4" class="w-20 cursor-pointer" onclick="changeImage('mainImage7', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/2a1bcff89a804cdceb2a42991b99fcac94f3bae7-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/e9b923ef40c945736bb200d54faef5375cbc476f-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 5" class="w-20 cursor-pointer" onclick="changeImage('mainImage7', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/e9b923ef40c945736bb200d54faef5375cbc476f-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <div class="grid gap-10 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 cursor-default items-center border-0 border-red-600">
                    <img id="mainImage8" src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/bccc7b5f8647a4f654d4bb359247bce6e82c77ab-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="" class="w-full">
    
                    <div>
                        <h1 class="mb-7 font-bold text-3xl">Haven</h1>
                        <p class="text-lg">Beneath a forgotten monastery, the cries of rival Agents battle for three locations. There’s more territory to capture, but the defenders can use the extra buildings to push aggressively.</p>
                    </div>
                </div>
    
                <div class="overflow-x-auto scrollbar-thin">
                    <div class="flex space-x-4 mt-8 mb-4 h-12">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/bccc7b5f8647a4f654d4bb359247bce6e82c77ab-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="Gambar" class="w-20 cursor-pointer" onclick="changeImage('mainImage8', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/bccc7b5f8647a4f654d4bb359247bce6e82c77ab-3840x2160.png?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/d9f3c040be38a8fc1f49f18d1221680419877c05-641x641.png?auto=format&fit=fill&q=80&w=641" alt="Gambar 1" class="w-20 cursor-pointer" onclick="changeImage('mainImage8', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/d9f3c040be38a8fc1f49f18d1221680419877c05-641x641.png?auto=format&fit=fill&q=80&w=641')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/b52bc228f7f8fd2b891870303c1c4d7284a89d3f-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 2" class="w-20 cursor-pointer" onclick="changeImage('mainImage8', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/b52bc228f7f8fd2b891870303c1c4d7284a89d3f-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/b19a54c8dbe6176fef57c3c1f887f289e5d37260-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 3" class="w-20 cursor-pointer" onclick="changeImage('mainImage8', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/b19a54c8dbe6176fef57c3c1f887f289e5d37260-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/982a482a004cafea6774bd302a010f9503b2c2a4-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 4" class="w-20 cursor-pointer" onclick="changeImage('mainImage8', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/982a482a004cafea6774bd302a010f9503b2c2a4-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/353bd3b5b50646947d9ed42ab7287971ce98b285-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 5" class="w-20 cursor-pointer" onclick="changeImage('mainImage8', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/353bd3b5b50646947d9ed42ab7287971ce98b285-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <div class="grid gap-10 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 cursor-default items-center border-0 border-red-600">
                    <img id="mainImage9" src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/878d51688c0f9dd0de827162e80c40811668e0c6-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="" class="w-full">
    
                    <div>
                        <h1 class="mb-7 font-bold text-3xl">Split</h1>
                        <p class="text-lg">If you want to progress fast, you have to go up. A pair of locations are split by a higher center that allows for quick movement using two ropes to ascend. Each location is built with a towering tower that is vital for control. Don't forget to look up before it's too late.</p>
                    </div>
                </div>
    
                <div class="overflow-x-auto scrollbar-thin">
                    <div class="flex space-x-4 mt-8 mb-4 h-12">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/878d51688c0f9dd0de827162e80c40811668e0c6-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="Gambar" class="w-20 cursor-pointer" onclick="changeImage('mainImage9', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/878d51688c0f9dd0de827162e80c40811668e0c6-3840x2160.png?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/dc8a607601339a6c79c8d144c93e17915cde8ac9-515x513.jpg?auto=format&fit=fill&q=80&w=515" alt="Gambar 1" class="w-20 cursor-pointer" onclick="changeImage('mainImage9', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/dc8a607601339a6c79c8d144c93e17915cde8ac9-515x513.jpg?auto=format&fit=fill&q=80&w=515')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/a90e310c8023ac6ed718ab9616939fc137ca0507-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 2" class="w-20 cursor-pointer" onclick="changeImage('mainImage9', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/a90e310c8023ac6ed718ab9616939fc137ca0507-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/2ee6b1da2bffeeccca6317312660e5453e04a5e7-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 3" class="w-20 cursor-pointer" onclick="changeImage('mainImage9', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/2ee6b1da2bffeeccca6317312660e5453e04a5e7-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/0432066543cda14d478a4acd52db320b082c85e0-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 4" class="w-20 cursor-pointer" onclick="changeImage('mainImage9', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/0432066543cda14d478a4acd52db320b082c85e0-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/5568b6c1c3247873b324306b43f545ed2fdcc9e6-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 5" class="w-20 cursor-pointer" onclick="changeImage('mainImage9', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/5568b6c1c3247873b324306b43f545ed2fdcc9e6-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                    </div>
                </div>
            </div>

            <div class="mb-16">
                <div class="grid gap-10 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 cursor-default items-center border-0 border-red-600">
                    <img id="mainImage10" src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/5cb7e65c04a489eccd725ce693fdc11e99982e10-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="" class="w-full">
    
                    <div>
                        <h1 class="mb-7 font-bold text-3xl">Ascent</h1>
                        <p class="text-lg">An open playground for small-scale skirmishes and gunfights splits Ascent's two locations. Each location can be fortified with irreversible bomb doors; once installed, you must destroy them or find another way in. Give up as little territory as possible.</p>
                    </div>
                </div>
    
                <div class="overflow-x-auto scrollbar-thin">
                    <div class="flex space-x-4 mt-8 mb-4 h-12">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/5cb7e65c04a489eccd725ce693fdc11e99982e10-3840x2160.png?auto=format&fit=fill&q=80&w=1504" alt="Gambar" class="w-20 cursor-pointer" onclick="changeImage('mainImage10', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/5cb7e65c04a489eccd725ce693fdc11e99982e10-3840x2160.png?auto=format&fit=fill&q=80&w=1504')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/a31ef0d024e1add0214eb49698ca13e58f62d17e-641x641.jpg?auto=format&fit=fill&q=80&w=641" alt="Gambar 1" class="w-20 cursor-pointer" onclick="changeImage('mainImage10', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/a31ef0d024e1add0214eb49698ca13e58f62d17e-641x641.jpg?auto=format&fit=fill&q=80&w=641')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/93f5b5f274df64d938051c4ca8577995190e711a-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 2" class="w-20 cursor-pointer" onclick="changeImage('mainImage10', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/93f5b5f274df64d938051c4ca8577995190e711a-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/09e229c7d265640c893088a9f85662bc35e23bca-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 3" class="w-20 cursor-pointer" onclick="changeImage('mainImage10', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/09e229c7d265640c893088a9f85662bc35e23bca-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/233a1c700d77c90abe1334332fea71e4941e1812-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 4" class="w-20 cursor-pointer" onclick="changeImage('mainImage10', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/233a1c700d77c90abe1334332fea71e4941e1812-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                        <img src="https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/db84c30d4a559326c6c691c8836fec4fc3998801-914x514.jpg?auto=format&fit=fill&q=80&w=914" alt="Gambar 5" class="w-20 cursor-pointer" onclick="changeImage('mainImage10', 'https://cmsassets.rgpub.io/sanity/images/dsfx7636/news/db84c30d4a559326c6c691c8836fec4fc3998801-914x514.jpg?auto=format&fit=fill&q=80&w=914')">
                    </div>
                </div>
            </div>

            <!-- <div class="mb-16">
                <div class="grid gap-10 lg:gap-16 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 cursor-default items-center border-0 border-red-600">
                    <img id="mainImage" src="aaa" alt="" class="w-full">
    
                    <div>
                        <h1 class="mb-7 font-bold text-3xl">Fracture</h1>
                        <p class="text-lg">A top-secret research facility has been devastated by a failed radianite experiment. With defense options as divided as the map, the choice is yours: meet the attackers on their own turf or prepare for an onslaught.</p>
                    </div>
                </div>
    
                <div class="overflow-x-auto scrollbar-thin">
                    <div class="flex space-x-4 mt-8 mb-4 h-12">
                        <img src="aaa" alt="Gambar" class="w-20 cursor-pointer" onclick="changeImage('mainImage', 'aaa')">
                        <img src="bbb" alt="Gambar 1" class="w-20 cursor-pointer" onclick="changeImage('mainImage', 'bbb')">
                        <img src="ccc" alt="Gambar 2" class="w-20 cursor-pointer" onclick="changeImage('mainImage', 'ccc')">
                        <img src="ddd" alt="Gambar 3" class="w-20 cursor-pointer" onclick="changeImage('mainImage', 'ddd')">
                        <img src="eee" alt="Gambar 4" class="w-20 cursor-pointer" onclick="changeImage('mainImage', 'eee')">
                        <img src="fff" alt="Gambar 5" class="w-20 cursor-pointer" onclick="changeImage('mainImage', 'fff')">
                    </div>
                </div>
            </div> -->
        </div>
    </section>

    <script>
        function changeImage(mainImageId, newSrc) {
            document.getElementById(mainImageId).src = newSrc;
        }
    </script>
</x-main>
