<template>

    <div>

        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">Logo</h1>


        <div class="mb-10">

            <picture style="height: 382px;" class="bg-red-lighter">
                <img src="/images/autopsy.jpg" alt="aliens bro" class="block shadow flex items-center justify-center mb-6 rounded-lg">
            </picture>

        <div class="flex justify-between items-center">
            <p>Alien autopsy</p>

            <a href="/images/autopsy.jpg" class="border border-grey-light px-8 py-2 rounded-full text-black font-bold text-xs">autopsy.jpg</a>
        </div>

        </div>




        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">Logo</h1>


        <div class="mb-10">

            <picture style="height: 382px;" class="bg-blue">
                <img src="/images/ufo.jpg" alt="ufos bro" class="block shadow flex items-center justify-center mb-6 rounded-lg">
            </picture>

            <div class="flex justify-between items-center">
                <p>UFO</p>

                <a href="/images/ufo.jpg" class="border border-grey-light px-8 py-2 rounded-full text-black font-bold text-xs">ufo.jpg</a>
            </div>

        </div>


    </div>





</template>



<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>