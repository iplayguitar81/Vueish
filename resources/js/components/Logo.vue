<template>

    <div>

        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-4">Logo</h1>



            <picture style="height: 382px;">
                <img src="/images/autopsy.jpg" alt="aliens bro">
            </picture>

        <div class="flex justify-between">
            <p>Alien autopsy.  The truth is out there brotha</p>

            <a href="/images/autopsy.jpg" class="">autopsy.jpg</a>
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