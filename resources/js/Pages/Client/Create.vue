<template>
    <app-layout>
        <template #header class="flex">
            <h1 class="text-4xl text-white font-bold">Créer un client</h1>
        </template>
        <client-form :form="form" @submit.prevent="createClient"/>
    </app-layout>
</template>

<script>

import AppLayout from "../../Layouts/AppLayout"
import ClientForm from "@/Components/Forms/ClientForm";
import { useForm } from '@inertiajs/inertia-vue3'

export default {
    components: {
        ClientForm,
        AppLayout
    },
    setup() {
        const form = useForm({
            description: null,
            business_name: null,
            legal_status: null,
            capital: null,
            siret: null,
            naf_code: null,
            country: null,
            address : null,
            postal_code : null,
            city: null
        })

        return {
            form
        }
    },
    methods: {
        createClient() {
            console.log(this.form)
        }
    }
}
</script>
