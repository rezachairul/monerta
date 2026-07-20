// app/auth/login/page.tsx

// test hello world
export const metadata = {
  title: "Login",
};

export default function LoginPage() {
    return (
        <div className="flex flex-col items-center justify-center min-h-screen bg-gray-200">
            <h1 className="text-4xl font-bold text-gray-800">
                Halaman Masuk
            </h1>
            <p className="mt-4 text-lg text-gray-600">
                Ini adalah halaman masuk untuk aplikasi Monetra.
            </p>
        </div>
    );
}