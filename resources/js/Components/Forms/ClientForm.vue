<template>
    <form action="" class="p-8 bg-white rounded-md">
        <form-wrapper title="Information société" subtitle="Informations légales de l'entreprise">
            <input-wrapper name="description">
                <template #label>Description</template>
                <input v-model="form.description" type="text" class="w-1/2 border-1 border-gray-300 rounded-lg"/>
            </input-wrapper>
            <input-wrapper name="business_name">
                <template #label>Raison Sociale</template>
                <input  v-model="form.business_name" type="text" class="w-1/2 border-1 border-gray-300 rounded-lg"/>
            </input-wrapper>
            <input-wrapper name="legal_status">
                <template #label>Statut Juridique</template>
                <input v-model="form.legal_status" type="text" class="w-1/2 border-1 border-gray-300 rounded-lg"/>
            </input-wrapper>
            <input-wrapper class="capital">
                <template #label>Capital</template>
                <input v-model="form.capital" type="text" class="w-1/2 border-1 border-gray-300 rounded-lg"/>
            </input-wrapper>
            <input-wrapper name="siret">
                <template #label>Numéro de siret</template>
                <input v-model="form.siret" type="text" class="w-1/2 border-1 border-gray-300 rounded-lg"/>
            </input-wrapper>
            <input-wrapper name="naf_code">
                <template #label>Code NAF (APE)</template>
                <input v-model="form.naf_code" type="text" class="w-1/2 border-1 border-gray-300 rounded-lg"/>
            </input-wrapper>
        </form-wrapper>
        <form-wrapper title="Adresse" subtitle="Localisation du siège social">
            <input-wrapper name="country">
                <template #label>Pays</template>
                <input v-model="form.country" type="text" class="w-1/2 border-1 border-gray-300 rounded-lg"/>
            </input-wrapper>
            <input-wrapper name="adress">
                <template #label>Adresse</template>
                <textarea v-model="form.address" class="w-1/2 border-1 border-gray-300 rounded-lg"></textarea>
            </input-wrapper>
            <input-wrapper name="postal_code">
                <template #label>Code postal</template>
                <input v-model="form.postal_code" type="text" class="w-1/2 border-1 border-gray-300 rounded-lg"/>
            </input-wrapper>
            <input-wrapper name="city">
                <template #label>Ville</template>
                <input v-model="form.city" type="text" class="w-1/2 border-1 border-gray-300 rounded-lg"/>
            </input-wrapper>
        </form-wrapper>
        <div class="flex justify-end">
            <div>
                <inertia-link :href="route('clients.index')" class="p-2 mr-2 border-2 rounded-md">
                    Annuler
                </inertia-link>
                <button class="p-2 bg-indigo-600 rounded-md text-white">
                    Sauvegarder
                </button>
            </div>
        </div>

    </form>

</template>

<script>
    import FormWrapper from "@/Components/Forms/FormWrapper";
    import InputWrapper from "@/Components/Inputs/InputWrapper";
    import Input from "@/Jetstream/Input";

    export default {
        name: "ClientForm",
        props: {
            form: Object
        },
        components: {Input, InputWrapper, FormWrapper},
        methods: {
            submit() {
                this.$emit("submit", this.form)
            }
        }
    }
</script>
