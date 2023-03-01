<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    clinics: Array,
});
</script>

<template>
    <AppLayout title="Index">
        <h1>Clinics Index</h1>
        <div class="bg-grey rounded-m shadow overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr class="text-left font-bold">
                        <th class="pb-4 pt-6 px-6">Clinic ID</th>
                        <th class="pb-4 pt-6 px-6">Clinic Name</th>
                        <th class="pb-4 pt-6 px-6">Clinic Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="clinic in clinics" :key="clinic.id" class="hover:bg-blue-100 focus-within:bg-gray-100">
                        <td class="border-t">{{ clinic.clinicID }}</td>
                        <td class="border-t">{{ clinic.clinicName }}</td>
                        <td class="border-t">{{ clinic.clinicAddress }}</td>
                        <td v-if="clinics.creditCardInfo" class="border-t"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </AppLayout>
</template>