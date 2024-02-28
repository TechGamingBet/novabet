<template>
    <div class="footer pb-32 md:pb-5 mt-5 footer-color p-4 md:p-8">
        <div class="md:w-4/6 2xl:w-4/6 m-auto">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="col-span-2 md:col-span-1 flex flex-col">
                    <div class="flex justify-between mb-3">
                        <div class="mr-5">
                            <a v-if="setting" href="/" class="flex ml-2 md:mr-24">
                                <img :src="`/storage/`+setting.software_logo_black" alt="" class="h-10 mr-3 block dark:hidden " />
                                <img :src="`/storage/`+setting.software_logo_white" alt=""  class="h-10 mr-3 hidden dark:block" />
                            </a>
                        </div>
                        <div>
                            <img :src="`/assets/images/+18.png`" width="42" alt="">
                        </div>
                    </div>
                    <div v-if="setting">
                        <div class="">
                            {{ setting.software_description }}
                        </div>

                        <div class="flex  mt-5">
                            <div class="flex pl-2">
                                <a href="" class="text-3xl text-gray-400">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                            <div class="flex pl-2">
                                <a href="" class="text-3xl text-gray-400">

                                </a>
                            </div>
                            <div class="flex pl-2">
                                <a href="" class="text-3xl text-gray-400">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-list">
                    <h3 class="text-base md:text-lg text-gray-600 dark:text-white font-bold">{{ $t('USEFUL LINKS') }}</h3>
                    <ul class="list-none mt-5">
                        <li class="transition duration-700 hover:dark:text-white text-gray-600 dark:text-gray-400 hover:text-gray-800 text-[12px]"><a href="">{{ $t('Payment methods') }}</a></li>
                    </ul>
                </div>
                <div class="footer-list">
                    <h3 class="text-base md:text-lg text-gray-600 dark:text-white font-bold">{{ $t('ABOUT US') }}</h3>
                    <ul class="list-none mt-5">
                        <li class="transition duration-700 hover:dark:text-white text-gray-600 dark:text-gray-400 hover:text-gray-800 text-[12px]"><a @click="$router.push('/terms/service')" href="">{{ $t('Service Terms') }}</a></li>
                        <li class="transition duration-700 hover:dark:text-white text-gray-600 dark:text-gray-400 hover:text-gray-800 text-[12px]"><a @click="$router.push('/terms/privacy-policy')" href="">{{ $t('Privacy Policy') }}</a></li>
                        <li class="transition duration-700 hover:dark:text-white text-gray-600 dark:text-gray-400 hover:text-gray-800 text-[12px]"><a @click="$router.push('/terms/bonus')" href="">{{ $t('Bonus Terms') }}</a></li>
                        <li class="transition duration-700 hover:dark:text-white text-gray-600 dark:text-gray-400 hover:text-gray-800 text-[12px]"><a @click="$router.push('/terms/bonus-welcome')" href="">{{ $t('Welcome Bonus') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <hr class="border-t border-gray-200 dark:border-gray-600 mt-5">

        <div v-if="setting" class="mt-5 flex flex-col justify-start ">
            <p class="text-[12px] w-full">© {{ year }} {{ setting.software_name }} {{ $t('All rights reserved') }}.</p>
            <p class="flex text-[10px] md:text-[12px]  w-full">
                {{ setting.software_name }} - Melhor lugar para você lucrar is operated by Nexus, company registration number 150731, with registered address at Groot Kwartierweg 10, Curaçao and is licensed and authorized by the Government of Curacao and operates under the Master License of Gaming Services Provider, N.V. #365/JAZ License Number: GLH-OCCHKTW0709172018. Payment agent company is Horangi Trading Limited with address Chytron, 30, 2nd floor, Flat/Office A22, 1075, Nicosia, Cyprus and Registration number: HE 411494.
    <br/>
        <br/>
Gambling can be addictive. Please play responsibly. Betfyre only accepts customers over 18 years of age.
            </p>
        </div>
    </div>
</template>

<script>
    import HttpApi from "@/Services/HttpApi.js";
    import {useSettingStore} from "@/Stores/SettingStore.js";

    export default {
        props: [],
        components: {},
        data() {
            return {
                isLoading: false,
                year: new Date().getFullYear(),
                setting: null,
            }
        },
        setup(props) {


            return {};
        },
        computed: {

        },
        mounted() {

        },
        methods: {
            getSetting: function() {
                const _this = this;
                const settingStore = useSettingStore();
                const settingData = settingStore.setting;

                if(settingData) {
                    _this.setting = settingData;
                }
            },
        },
        created() {
            this.getSetting();
        },
        watch: {

        },
    };
</script>

<style scoped>

</style>
