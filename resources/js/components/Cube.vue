<template>
    <div class="spinner spinner--cube">
        <img src="https://thumbs.gfycat.com/AchingSpeedyArmyworm-size_restricted.gif" alt="loader"> 
    </div>

</template>

<script>
    export default {
        name: "Cube",
    }
</script>

<style>
    .spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        background-size: 100% 100%;
        z-index: 1;
    }
</style>
