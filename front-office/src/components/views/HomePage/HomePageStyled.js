import styled from 'styled-components';
import theme from '../../../theme/theme';

const HomePageStyled = styled.div`

  section {
    margin-bottom: 2em;
  }

  section#intro-zn {
    text-align: center;


    img {
      margin: -16px;
      max-width: 100vw;
      z-index: -1;
    }

    div.intro-zn--text-zn {
      text-align: left;
      padding: 1em;
      border: 1px solid ${theme.colors.black};
      margin-top: -5em;
      margin-bottom: 2em;
      background-color: white;
      opacity: .99;

      h1 {
        display : inline-block;
        position: relative;
        margin: 0;
        text-transform: uppercase;
        font-size: 48px;

        :after{
          content: '';
          position: absolute;
          left: 0;
          bottom: 14px;
          width: 100%;
          height: 15px;
          background-color: ${theme.colors.orange};
          z-index: -1;
        }
      }
      
      p {
        font-size: 24px;
        line-height: 36px;
      }
    }
  }

  section#special-alert-zn {
    text-align: center;
    background-color: ${theme.colors.purple};
    border-top: 1px solid ${theme.colors.black};
    border-bottom: 1px solid ${theme.colors.black};
    margin: 0;

    p {
      color: white;
      font-weight: bold;
      text-transform: uppercase;
      font-size: 16px;
      padding: 1em 3em;
      margin: 0;
    }
  }

  section#planning-zn {

    text-align: center;
    
    table, th, td {
      border: 1px solid ${theme.colors.black};
      border-collapse: collapse;;
    }
    
    table {
      width: 100%;
      margin: 2em 0;

      td, th {
        padding: 8px;
        text-align: center;
      }
      
      tr.tr-top>th, tr.tr-top>td{
        border-top: 1px solid white;
      }

      tr.tr-down>th, tr.tr-down>td{
        border-bottom: 1px solid white;
      }

      td.delivery {
        background-color: ${theme.colors.lightOrange};
        font-family: ${theme.fonts.special};
        font-weight: bold;
      }

      td:first-child, th:first-child {
        border-left: 1px solid white;
      }

      td:last-child, th:last-child {
        border-right: 1px solid white;
      }

      td>strong.market-place {
        font-family: ${theme.fonts.special};
        font-weight: bold;
      }
    }
  }

  section#highlighted-products-zn {
    background-color: ${theme.colors.orange};
    margin: 0;
    padding: 0 1em;
    text-align: center;

    h2 {
      color: white;
      padding-top: 2em;
      margin-bottom: 2em;
      margin-top: 0;

    }

    button {
      background-color: white;
      color: ${theme.colors.orange};
      margin: 2em 0;
    }

    div.product-zn {
      max-width: 350px;
      margin: 0 auto;

      img {
        border: 1px solid ${theme.colors.black};
        max-width: 100%;
        box-sizing: border-box;
      }

      div.txt-zn {
        margin: -3em -2em 0;
        text-align: left;
        background-color: white;
        padding: 2em;
        padding-top: 3em;
        border: 1px solid ${theme.colors.black};
      
        p {
          margin: 0;
        }

        p.bio {
          margin-top: 1em;
          font-weight: bold;
        }

        p.price {
          margin-top: 1em;
          font-family: ${theme.fonts.special};
          font-weight: bold;
        }
      }
    }
  }
`;

export default HomePageStyled;