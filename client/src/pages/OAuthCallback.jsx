import { useEffect } from 'react';
import { useNavigate } from 'react-router-dom';

export default function OAuthCallback() {
  const navigate = useNavigate();

  useEffect(() => {
    const params = new URLSearchParams(window.location.search);
    const token = params.get('token');
    if (token) {
      localStorage.setItem('auth_token', token);
      setTimeout(() => {
        navigate('/home');
      }, 0);
    } else {
      setTimeout(() => {
        navigate('/');
      }, 0);
    }
  }, []);

  return <div>Đang xử lý đăng nhập...</div>;
}
