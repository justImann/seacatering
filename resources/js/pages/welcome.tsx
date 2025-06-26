import GuestLayout from '@/layouts/guest-layout';
import { type SharedData } from '@/types';
import { Head, usePage } from '@inertiajs/react';

export default function Welcome() {
    const { auth } = usePage<SharedData>().props;

    return (
        <>
            <GuestLayout>
                <Head title="Welcome">
                    <link rel="preconnect" href="https://fonts.bunny.net" />
                    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
                </Head>
                <div className="flex min-h-screen flex-col items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
                    <h1 className="mb-4 text-4xl font-bold">Welcome to Our Application</h1>
                    {auth.user ? <p className="text-lg">Hello, {auth.user.name}!</p> : <p className="text-lg">Please log in to continue.</p>}
                </div>
            </GuestLayout>
        </>
    );
}
