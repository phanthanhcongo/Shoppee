import React, { useState } from "react";
import "../assets/styles/index.css";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faEye, faEyeSlash } from "@fortawesome/free-solid-svg-icons";
import { getGoogleLoginUrl } from "../api/googleAuth";
import { useNavigate } from 'react-router-dom';

const Login = () => {
  const [form, setForm] = useState({ email: "", password: "" });
  const [error, setError] = useState("");
  const [showPassword, setShowPassword] = useState(false);
  const navigate = useNavigate();

  const handleChange = (e) => {
    setForm({ ...form, [e.target.name]: e.target.value });
    setError("");
  };

  const handleSubmit = async (e) => {
    e.preventDefault();

    if (!form.email.trim() || !form.password.trim()) {
      setError("Vui lòng nhập đầy đủ thông tin.");
      return;
    }

    try {
      const res = await fetch("http://localhost:8000/api/login", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          login: form.email,   // ✅ đổi key thành 'login' như backend yêu cầu
          password: form.password
        }),
      });



      const data = await res.json();

      if (res.ok) {
        localStorage.setItem('auth_token', data.token);
        navigate('/home');
      } else {
        // Nếu backend trả mã lỗi (ví dụ 401 Unauthorized)
        if (res.status === 401) {
          setError("Tài khoản hoặc mật khẩu không đúng.");
        } else {
          setError(data.message || "Đăng nhập thất bại.");
        }
      }
    } catch (err) {
      setError("Có lỗi kết nối đến máy chủ.");
      console.error("Lỗi:", err);
    }
  };

 const handleGoogleLogin = async () => {
  const res = await fetch("http://localhost:8000/login/google/url");
  const data = await res.json();
  window.location.href = data.url;
}
// Facebook login
  const handleFacebookLogin = async () => {
    const res = await fetch("http://localhost:8000/login/facebook/url");
    const data = await res.json();
    window.location.href = data.url;
  };

  return (
    <div className="min-h-screen bg-orange-600 flex justify-center items-center">
      <div className="relative w-[1040px] h-[600px] bg-[url('http://localhost:8000/storage/banners/loginBanner.jpeg')] bg-no-repeat bg-center bg-auto">
        <div className="absolute inset-0 flex justify-end items-center h-[600px]">
          <form onSubmit={handleSubmit} className="p-6 bg-slate-50 rounded shadow-md w-[350px] h-[400px]">
            <h2 className="text-xl font-semibold text-gray-800 mb-4">Đăng nhập</h2>



            <input type="text" name="email" placeholder="(+84) Số điện thoại" value={form.email} onChange={handleChange} className="w-full p-3 mb-3 border rounded" />

            <div className="relative mb-3">
              <input type={showPassword ? "text" : "password"} name="password" placeholder="Mật khẩu" value={form.password} onChange={handleChange} className="w-full p-3 border rounded pr-10" />
              <span onClick={() => setShowPassword(!showPassword)} className="absolute right-3 top-3 cursor-pointer text-gray-400">
                <FontAwesomeIcon icon={showPassword ? faEyeSlash : faEye} />
              </span>
            </div>
            {error && <div className="mb-3 text-red-500 text-sm">{error}</div>}
            <button type="submit" className="w-full bg-[#f97316] text-white font-semibold py-2 rounded mt-2 hover:bg-orange-500 active:bg-orange-600">
              ĐĂNG NHẬP
            </button>

            <div className="flex justify-between text-sm text-blue-600 mt-2">
              <a href="#">Quên mật khẩu</a>
              <a href="#">Đăng nhập với SMS</a>
            </div>

            <div className="flex items-center my-4">
              <div className="flex-grow h-px bg-gray-300"></div>
              <span className="mx-2 text-gray-400 text-sm">HOẶC</span>
              <div className="flex-grow h-px bg-gray-300"></div>
            </div>

            <div className="flex gap-3">
             <button type="button" onClick={handleFacebookLogin} className="flex-1 border border-gray-300 py-2 rounded flex items-center justify-center gap-2 hover:bg-gray-50">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" className="w-5 h-5" />
                Facebook
              </button>

              <button type="button" onClick={handleGoogleLogin} className="flex-1 border border-gray-300 py-2 rounded flex items-center justify-center gap-2 hover:bg-gray-50">
                <img src="https://cdn-icons-png.flaticon.com/512/281/281764.png" alt="Google" className="w-5 h-5" />
                Google
              </button>
            </div>

            <div className="text-center text-sm text-gray-600 mt-4">
              Bạn mới biết đến Shopee? <a href="#" className="text-orange-500 font-medium">Đăng ký</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  );
};

export default Login;
