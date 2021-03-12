<template>
    <app-layout>
        <template #header>
            <h1 class="text-4xl text-white font-bold">Dashboard</h1>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <dashed-section title="Statistiques" class="flex">
                        <stat-card subject="clients" quantity="125" evolution="12">
                            <template #icon>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="48" height="48" rx="6" fill="#6366F1"/>
                                    <path d="M24 16.3542C24.7329 15.5238 25.8053 15 27 15C29.2091 15 31 16.7909 31 19C31 21.2091 29.2091 23 27 23C25.8053 23 24.7329 22.4762 24 21.6458M27 33H15V32C15 28.6863 17.6863 26 21 26C24.3137 26 27 28.6863 27 32V33ZM27 33H33V32C33 28.6863 30.3137 26 27 26C25.9071 26 24.8825 26.2922 24 26.8027M25 19C25 21.2091 23.2091 23 21 23C18.7909 23 17 21.2091 17 19C17 16.7909 18.7909 15 21 15C23.2091 15 25 16.7909 25 19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </template>
                        </stat-card>
                        <stat-card subject="projects" quantity="25" evolution="-5">
                            <template #icon>
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="48" height="48" rx="6" fill="#6366F1"/>
                                    <path d="M26.9998 27L24.9998 32L20.9998 21L31.9998 25L26.9998 27ZM26.9998 27L31.9998 32M19.1881 14.2385L19.9645 17.1363M17.1361 19.9647L14.2383 19.1883M25.9495 16.0503L23.8282 18.1716M18.1715 23.8284L16.0501 25.9497" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>


                            </template>
                        </stat-card>
                    </dashed-section>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import DashedSection from "@/Components/Structures/DashedSection";
    import StatCard from "@/Components/Cards/StatCard";

    export default {
        components: {
            StatCard,
            AppLayout,
            DashedSection
        },
    }
</script>
