export default function AuthLayout({ children }) {
  return (
    <div className="min-h-screen flex items-center justify-center bg-gray-100">
      <div className="w-full max-w-md bg-white p-8 rounded shadow border border-gray-300">
        {children}
      </div>
    </div>
  );
}
// This layout is used for authentication pages like login and register