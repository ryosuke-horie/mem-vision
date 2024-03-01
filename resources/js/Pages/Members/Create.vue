<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Input from "@/Components/organisms/Input.vue";

/**
 * 会員登録フォーム
 *
 * @see https://preline.co/examples/application-form-layouts.html
 */
defineProps({
    user: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <AuthenticatedLayout :user="user">
        <!-- Card Section -->
        <div class="max-w-4xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Card -->
            <div
                class="bg-white rounded-xl shadow p-4 sm:p-7 dark:bg-slate-900"
            >
                <form>
                    <!-- Section -->
                    <div
                        class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent"
                    >
                        <div class="sm:col-span-12">
                            <h2
                                class="text-lg font-semibold text-gray-800 dark:text-gray-200"
                            >
                                会員情報登録
                                <!-- 赤文字で必須 -->
                                <span class="text-red-500 text-sm">*必須</span>
                            </h2>
                        </div>
                        <!-- End Col -->

                        <!-- Note：分割したInputはコンポーネント未対応 -->
                        <div class="sm:col-span-3">
                            <label
                                for="af-submit-application-full-name"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5"
                            >
                                苗字 | 名前
                            </label>
                        </div>

                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input
                                    id="af-submit-application-full-name"
                                    type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                />
                                <input
                                    type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                />
                            </div>
                        </div>

                        <Input
                            label="メールアドレス"
                            id="email"
                            value=""
                            required
                        />
                        <Input label="電話番号" id="phone" value="" required />
                        <Input label="住所" id="address" value="" required />
                    </div>
                    <!-- End Section -->

                    <!-- Section -->
                    <div
                        class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent"
                    >
                        <div class="sm:col-span-12">
                            <h2
                                class="text-lg font-semibold text-gray-800 dark:text-gray-200"
                            >
                                顔写真
                            </h2>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label
                                for="af-submit-application-resume-cv"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5"
                            >
                                1枚目
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <label
                                for="af-submit-application-resume-cv"
                                class="sr-only"
                                >Choose file</label
                            >
                            <input
                                type="file"
                                name="af-submit-application-resume-cv"
                                id="af-submit-application-resume-cv"
                                class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 file:bg-transparent file:border-0 file:bg-gray-100 file:me-4 file:py-2 file:px-3 dark:file:bg-gray-700 dark:file:text-gray-400"
                            />
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label
                                for="af-submit-application-resume-cv"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5"
                            >
                                2枚目
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <label
                                for="af-submit-application-resume-cv"
                                class="sr-only"
                                >Choose file</label
                            >
                            <input
                                type="file"
                                name="af-submit-application-resume-cv"
                                id="af-submit-application-resume-cv"
                                class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 file:bg-transparent file:border-0 file:bg-gray-100 file:me-4 file:py-2 file:px-3 dark:file:bg-gray-700 dark:file:text-gray-400"
                            />
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label
                                for="af-submit-application-resume-cv"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5"
                            >
                                3枚目
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <label
                                for="af-submit-application-resume-cv"
                                class="sr-only"
                                >Choose file</label
                            >
                            <input
                                type="file"
                                name="af-submit-application-resume-cv"
                                id="af-submit-application-resume-cv"
                                class="block w-full border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600 file:bg-transparent file:border-0 file:bg-gray-100 file:me-4 file:py-2 file:px-3 dark:file:bg-gray-700 dark:file:text-gray-400"
                            />
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Section -->

                    <!-- Section -->
                    <div
                        class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-gray-700 dark:first:border-transparent"
                    >
                        <div class="sm:col-span-12">
                            <h2
                                class="text-lg font-semibold text-gray-800 dark:text-gray-200"
                            >
                                プロフィール
                            </h2>
                        </div>
                        <!-- End Col -->
                        <div class="sm:col-span-3">
                            <div class="inline-block">
                                <label
                                    for="af-submit-application-bio"
                                    class="inline-block text-sm font-medium text-gray-500 mt-2.5"
                                >
                                    メモ
                                </label>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <textarea
                                id="af-submit-application-bio"
                                class="py-2 px-3 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600"
                                rows="6"
                                placeholder="Add a cover letter or anything else you want to share."
                            ></textarea>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Section -->

                    <button
                        type="button"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                    >
                        送信
                    </button>
                </form>
            </div>
            <!-- End Card -->
        </div>
        <!-- End Card Section -->
    </AuthenticatedLayout>
</template>
