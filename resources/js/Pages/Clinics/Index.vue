<script setup>
defineProps({
    clinics: Array,
});
</script>

<template>
    <h1>Clinics Index</h1>
    <div v-for="clinic in clinics" :key="clinic.clinicName">
        {{ clinic.clinicName }}
    </div>
</template>