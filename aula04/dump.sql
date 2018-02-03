--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.6
-- Dumped by pg_dump version 9.6.6

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: posts; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE posts (
    id integer NOT NULL,
    titulo character varying(255) NOT NULL,
    conteudo text,
    id_usuario integer
);


ALTER TABLE posts OWNER TO lucas;

--
-- Name: posts_id_seq; Type: SEQUENCE; Schema: public; Owner: lucas
--

CREATE SEQUENCE posts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE posts_id_seq OWNER TO lucas;

--
-- Name: posts_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lucas
--

ALTER SEQUENCE posts_id_seq OWNED BY posts.id;


--
-- Name: usuarios; Type: TABLE; Schema: public; Owner: lucas
--

CREATE TABLE usuarios (
    id integer NOT NULL,
    usuario character varying(100) NOT NULL,
    senha character varying(8) NOT NULL
);


ALTER TABLE usuarios OWNER TO lucas;

--
-- Name: usuarios_id_seq; Type: SEQUENCE; Schema: public; Owner: lucas
--

CREATE SEQUENCE usuarios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE usuarios_id_seq OWNER TO lucas;

--
-- Name: usuarios_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: lucas
--

ALTER SEQUENCE usuarios_id_seq OWNED BY usuarios.id;


--
-- Name: posts id; Type: DEFAULT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY posts ALTER COLUMN id SET DEFAULT nextval('posts_id_seq'::regclass);


--
-- Name: usuarios id; Type: DEFAULT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY usuarios ALTER COLUMN id SET DEFAULT nextval('usuarios_id_seq'::regclass);


--
-- Data for Name: posts; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY posts (id, titulo, conteudo, id_usuario) FROM stdin;
1	Post1	conteúdo post1	1
2	Post2	conteúdo post2	1
3	Post3	conteúdo post3	1
5	Post4	conteúdo post4	3
6	Post5	conteúdo post5	3
\.


--
-- Name: posts_id_seq; Type: SEQUENCE SET; Schema: public; Owner: lucas
--

SELECT pg_catalog.setval('posts_id_seq', 6, true);


--
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: lucas
--

COPY usuarios (id, usuario, senha) FROM stdin;
1	lucas	123
3	joao	123
4	4Linux	4linux
6	José Aldo	123
\.


--
-- Name: usuarios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: lucas
--

SELECT pg_catalog.setval('usuarios_id_seq', 6, true);


--
-- Name: posts posts_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY posts
    ADD CONSTRAINT posts_pkey PRIMARY KEY (id);


--
-- Name: usuarios usuario_unique; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuario_unique UNIQUE (usuario);


--
-- Name: usuarios usuarios_pkey; Type: CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY usuarios
    ADD CONSTRAINT usuarios_pkey PRIMARY KEY (id);


--
-- Name: posts posts_id_usuario_fkey; Type: FK CONSTRAINT; Schema: public; Owner: lucas
--

ALTER TABLE ONLY posts
    ADD CONSTRAINT posts_id_usuario_fkey FOREIGN KEY (id_usuario) REFERENCES usuarios(id);


--
-- PostgreSQL database dump complete
--

