export async function getGoogleLoginUrl() {
  const response = await fetch('http://localhost:8000/api/login/google');
  const data = await response.json();
  return data.url;
}
